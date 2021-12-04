<?php

return \App\Models\Text::where('lang','en-us')->with('block')->get()->pluck('text','block.name');
