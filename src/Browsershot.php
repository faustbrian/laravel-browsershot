<?php

/*
 * This file is part of Laravel Browsershot.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Browsershot;

use Exception;
use Illuminate\Config\Repository as Config;
use Illuminate\Filesystem\FilesystemManager;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Intervention\Image\ImageManager;

/**
 * Class Browsershot.
 */
class Browsershot
{
    /**
     * @var \Illuminate\Config\Repository
     */
    private $config;

    /**
     * @var \Illuminate\Filesystem\FilesystemManager
     */
    private $filesystem;

    /**
     * @var int
     */
    private $width;

    /**
     * @var int
     */
    private $height;

    /**
     * @var int
     */
    private $quality;

    /**
     * @var string
     */
    private $backgroundColor;

    /**
     * @var int
     */
    private $uri;

    /**
     * @var string
     */
    private $binPath;

    /**
     * @var int
     */
    private $timeout;

    /**
     * @param \Illuminate\Config\Repository            $config
     * @param \Illuminate\Filesystem\FilesystemManager $filesystem
     */
    public function __construct(Config $config, FilesystemManager $filesystem)
    {
        $this->config = $config;
        $this->filesystem = $filesystem;
    }

    /**
     * @param string $binPath
     *
     * @return $this
     */
    public function setBinPath($binPath): self
    {
        if (!file_exists($binPath)) {
            throw new Exception("$binPath does not exist.");
        }

        $this->binPath = $binPath;

        return $this;
    }

    /**
     * @param string $preset
     *
     * @throws \Exception
     *
     * @return $this
     */
    public function setPreset(string $preset): self
    {
        if (!$this->config->has("laravel-browsershot.presets.$preset")) {
            throw new Exception("$preset does not exist.");
        }

        $preset = config("laravel-browsershot.presets.$preset");

        $this->setWidth($preset['width']);
        $this->setHeight($preset['height']);

        return $this;
    }

    /**
     * @param int $width
     *
     * @throws \Exception
     *
     * @return $this
     */
    public function setWidth(int $width): self
    {
        $this->width = $width;

        return $this;
    }

    /**
     * @param int $height
     *
     * @throws \Exception
     *
     * @return $this
     */
    public function setHeight(int $height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Set the image quality.
     *
     * @param int $quality
     *
     * @throws \Exception
     *
     * @return $this
     */
    public function setQuality(int $quality): self
    {
        if ($quality < 1 || $quality > 100) {
            throw new Exception('Quality must be a numeric value between 1 - 100');
        }

        $this->quality = $quality;

        return $this;
    }

    /**
     * Set the background color.
     *
     * @param string $backgroundColor
     *
     * @return $this
     */
    public function setBackgroundColor($backgroundColor): self
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }

    /**
     * Set to height so the whole page will be rendered.
     *
     * @return $this
     */
    public function setHeightToRenderWholePage(): self
    {
        $this->height = 0;

        return $this;
    }

    /**
     * @param string $uri
     *
     * @throws \Exception
     *
     * @return $this
     */
    public function setUri(string $uri): self
    {
        $this->uri = $uri;

        return $this;
    }

    /**
     * @param int $timeout
     *
     * @throws \Exception
     *
     * @return $this
     */
    public function setTimeout(int $timeout): self
    {
        $this->timeout = $timeout;

        return $this;
    }

    /**
     * Convert the webpage to an image.
     *
     * @param string $targetFile The path of the file where the screenshot should be saved
     *
     * @throws \Exception
     *
     * @return bool
     */
    public function save(string $targetFile): bool
    {
        $validator = Validator::make([
            'targetFile' => pathinfo($targetFile, PATHINFO_EXTENSION),
            'uri' => $this->uri,
        ], [
            'targetFile' => ['required', Rule::in(['jpeg', 'jpg', 'png'])],
            'uri' => 'required|url',
        ]);

        if ($validator->fails()) {
            throw new Exception($validator->errors()->first());
        }

        $this->takeScreenShot($targetFile);

        if (!file_exists($targetFile) || filesize($targetFile) < 1024) {
            throw new Exception('could not create screenshot');
        }

        if ($this->height > 0) {
            $imageManager = new ImageManager();
            $imageManager
                ->make($targetFile)
                ->crop($this->width, $this->height, 0, 0)
                ->save($targetFile, $this->quality);
        }

        return true;
    }

    /**
     * @param string $preset
     *
     * @throws \Exception
     *
     * @return array
     */
    public function getPreset(string $preset): array
    {
        $key = "laravel-browsershot.presets.$preset";

        if (!$this->config->has($key)) {
            throw new Exception("$preset does not exist.");
        }

        return $this->config->get($key);
    }

    /**
     * Take the screenshot.
     *
     * @param string $targetFile
     */
    protected function takeScreenShot(string $targetFile)
    {
        $tempJsFileHandle = tmpfile();

        fwrite($tempJsFileHandle, $this->getPhantomJsScript($targetFile));
        $tempFileName = stream_get_meta_data($tempJsFileHandle)['uri'];
        $cmd = escapeshellcmd("{$this->binPath} --ssl-protocol=any --ignore-ssl-errors=true ".$tempFileName);

        shell_exec($cmd);

        fclose($tempJsFileHandle);
    }

    /**
     * Get the script to be executed by phantomjs.
     *
     * @param string $targetFile
     *
     * @return string
     */
    protected function getPhantomJsScript($targetFile): string
    {
        return view('browsershot::phantomjs', [
            'timeout' => $this->timeout,
            'width' => $this->width,
            'height' => $this->height,
            'uri' => $this->uri,
            'backgroundColor' => $this->backgroundColor,
            'targetFile' => $targetFile,
        ])->render();
    }
}
