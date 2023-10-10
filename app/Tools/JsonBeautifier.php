<?php

namespace App\Tools;

use App\Models\Tool;
use SimpleXMLElement;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Contracts\ToolInterface;
use App\Helpers\Classes\ArrayToXml;

class JsonBeautifier implements ToolInterface
{
    public function render(Request $request, Tool $tool)
    {
        return view('tools.json-beautifier', compact('tool'));
    }

    public function handle(Request $request, Tool $tool)
    {
        abort(404);
    }


}
