<?php

return \App\Models\Text::where('lang','id')->with('block')->get()->pluck('text','block.name');
