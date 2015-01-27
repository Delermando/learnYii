<?php
class GMessages{
    public static function getNeedTranslation($event){
        $text = "";
        $text .= "Language: {$event->language} <br /> ";
        $text .= "Category: {$event->category} <br /> ";
        $text .= "Message: {$event->message} <br /> ";
        mail('delsantos@hotmail.com.br', 'Need Translation', $text);
    }
}