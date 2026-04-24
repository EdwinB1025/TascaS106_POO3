<?php
enum Topic: string
{
    use BackedString;

    case PHP = 'php';
    case CSS = 'css';
    case HTML = 'html';
    case Laravel = 'laravel';
}
