<?php

return \App\Models\Text::where('lang','tr')->with('block')->get()->pluck('text','block.name');
