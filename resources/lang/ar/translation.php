<?php

return \App\Models\Text::where('lang','ar')->with('block')->get()->pluck('text','block.name');
