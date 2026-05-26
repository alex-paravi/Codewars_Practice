<?php

class VersionManager
{
    public $major;
    public $minor;
    public $patch;
    private array $history = [];
    public function __construct(string $initialVersion = '')
    {
        if ($initialVersion == '') {
            $this->major = 0;
            $this->minor = 0;
            $this->patch = 1;
            return;
        }
        $parts = explode('.', $initialVersion);
        $countToCheck = min(3, count($parts));
        for ($i = 0; $i < $countToCheck; $i++) {
            if (!is_numeric($parts[$i])) {
                throw new Exception("Error occured while parsing version!");
            }
        }
        $this->major = isset($parts[0]) ? (int)$parts[0] : 0;
        $this->minor = isset($parts[1]) ? (int)$parts[1] : 0;
        $this->patch = isset($parts[2]) ? (int)$parts[2] : 0;
    }
    public function major()
    {
        $this->history[] = $this->release();
        $this->major += 1;
        $this->minor = 0;
        $this->patch = 0;
        return $this;
    }
    public function minor()
    {
        $this->history[] = $this->release();
        $this->minor += 1;
        $this->patch = 0;
        return $this;
    }
    public function patch()
    {
        $this->history[] = $this->release();
        $this->patch += 1;
        return $this;
    }
    public function release()
    {
        return "{$this->major}.{$this->minor}.{$this->patch}";
    }
    public function rollback()
    {
        if (empty($this->history)) {
            throw new Exception("Cannot rollback!");
        }

        $previousVersion = array_pop($this->history);

        $parts = explode('.', $previousVersion);
        $this->major = (int)$parts[0];
        $this->minor = (int)$parts[1];
        $this->patch = (int)$parts[2];
        return $this;
    }
}

$vm = new VersionManager("1.2.2");
echo $vm->major()->rollback()->release();
