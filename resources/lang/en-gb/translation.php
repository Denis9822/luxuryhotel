<?php

return \App\Models\Text::where('lang','en-gb')->with('block')->get()->pluck('text','block.name');
