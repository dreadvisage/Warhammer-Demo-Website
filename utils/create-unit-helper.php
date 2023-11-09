<?php

class HtmlUnitEchoBuilder {
    private $html = "";
    private $name = "";

    private function __construct($name) {
        $this->html .= '<li>' . $name . '</li>';
        $this->html .= '<ul class="unit-type-list">';
    }

    public static function new($name): HtmlUnitEchoBuilder {
        $b = new HtmlUnitEchoBuilder($name);
        $b->name = $name;
        return $b;
    }

    public function model($models, $padding, $points): HtmlUnitEchoBuilder {
        $this->html .= '<li>' . $models . ' models' . Self::createPadding($padding) . $points . ' pts ';
        $this->html .= '<button type="submit" onclick="' . Self::getJs($this->name, $models, $points) . '">➕</button></li>';
        return $this;
    }

    public function modelCustom($models, $padding, $points): HtmlUnitEchoBuilder {
        $this->html .= '<li>' . $models . Self::createPadding($padding) . $points . ' pts ';
        $this->html .= '<button type="submit" onclick="' . Self::getJs($this->name, $models, $points) . '">➕</button></li>';
        return $this;
    }

    public static function echoUnit($name, $models, $padding, $points) {
        $html = '<li>' . $name . '</li>';
        $html .= '<ul class="unit-type-list">';
        $html .= '<li>' . $models . ' models' . Self::createPadding($padding) . $points . ' pts ';
        $html .= '<button type="submit" onclick="' . Self::getJs($name, $models, $points) . '">➕</button></li></ul>';
        echo $html;
    }

    public static function getJs($name, $models, $points) {
        /* This is ugly has hell. Find a more natural way to make this happen. */
        $js = "(
            function() {
                document.getElementById('name').value = '" . $name . "';
                document.getElementById('models').value = '" . $models . "';
                document.getElementById('points').value = '" . $points . "';
            }
            )(); return true;";
        return $js;
    }

    public static function createPadding($padding) {
        $padding_str = "";
        for ($i = 0; $i < $padding; ++$i) {
            $padding_str .= '.';
        }
        return $padding_str;
    }

    public function echo() {
        $this->html .= '</ul>';
        echo $this->html;
    }
}


?>