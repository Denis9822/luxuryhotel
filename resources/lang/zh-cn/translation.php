<?php

return \App\Models\Text::where('lang','zh-cn')->with('block')->get()->pluck('text','block.name');
