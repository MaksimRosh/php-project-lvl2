<?php

namespace Differ\Cli;

use Docopt;

function start(): string
{
    $doc = <<<DOC
    Generate diff
    
    Usage:
      gendiff (-h|--help)
      gendiff (-v|--version)
      gendiff [--format <fmt>] <firstFile> <secondFile>
    
    Options:
      -h --help                     Show this screen
      -v --version                  Show version
    DOC;

    $args = Docopt::handle($doc, ['version' => 'gendiff v: 0.0.1']);

}
