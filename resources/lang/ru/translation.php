<?php
 return \App\Models\Text::where('lang','ru')->with('block')->get()->pluck('text','block.name');
