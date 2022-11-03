<?php

//Copyright (c) 2022 bariscodefx
//
//Permission is hereby granted, free of charge, to any person obtaining
//a copy of this software and associated documentation files (the
//"Software"), to deal in the Software without restriction, including
//without limitation the rights to use, copy, modify, merge, publish,
//distribute, sublicense, and/or sell copies of the Software, and to
//permit persons to whom the Software is furnished to do so, subject to
//the following conditions:
//
//The above copyright notice and this permission notice shall be
//included in all copies or substantial portions of the Software.
//
//THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
//EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
//MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
//NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
//LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
//OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
//WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

function h1($s="")
{
  return "<h1>$s</h1>";
}

function h2($s="")
{
  return "<h2>$s</h2>";
}

function h3($s="")
{
  return "<h3>$s</h3>";
}

function h4($s="")
{
  return "<h4>$s</h4>";
}

function h5($s="")
{
  return "<h5>$s</h5>";
}

function h6($s="")
{
  return "<h6>$s</h6>";
}

function p($s="")
{
  return "<p>$s</p>";
}

function span($s="")
{
  return "<span>$s</span>";
}

function endl()
{
  echo br();
}

function br()
{
  return "<br>";
}