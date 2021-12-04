<?php

return \App\Models\Text::where('lang','es')->with('block')->get()->pluck('text','block.name');
