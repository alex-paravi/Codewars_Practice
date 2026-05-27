<?php
class TextEditor
{
    public $result = "";
    private $history = [];


    public function append(string $text)
    {
        if ($text !== "") {
            $this->history[] = $this->print();
        }
        $this->result .= $text;
        return $this;
    }

    public function upper()
    {
        $this->history[] = $this->print();
        $this->result = strtoupper($this->result);
        return $this;
    }

    public function lower()
    {
        $this->history[] = $this->print();
        $this->result = strtolower($this->result);
        return $this;
    }

    public function clear()
    {
        $this->history[] = $this->print();
        $this->result = "";
        return $this;
    }

    public function undo()
    {
        if (empty($this->history)) {
            throw new Exception("Nothing to undo!");
        }

        $this->result = array_pop($this->history);

        return $this;
    }

    public function print()
    {
        return $this->result;
    }
}


$editor = new TextEditor;

echo $editor->append('sdfsf');
