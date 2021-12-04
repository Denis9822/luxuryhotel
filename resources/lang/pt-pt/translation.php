<?php

return \App\Models\Text::where('lang','pt-pt')->with('block')->get()->pluck('text','block.name');
