<?php
namespace App\Core\Interfaces;

interface IRequest{
    public function getRoute();
    public function getParams();
}