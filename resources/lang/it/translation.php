<?php

return \App\Models\Text::where('lang','it')->with('block')->get()->pluck('text','block.name');
