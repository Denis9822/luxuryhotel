<?php

return \App\Models\Text::where('lang','fr')->with('block')->get()->pluck('text','block.name');
