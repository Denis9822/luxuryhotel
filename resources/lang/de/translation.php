<?php

return \App\Models\Text::where('lang','de')->with('block')->get()->pluck('text','block.name');
