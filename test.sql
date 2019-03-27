$age = 23;
$days = 8;
Omc::where('age_start', '<=', $age)->where('age_end', '>=', $age)->where('days', '>=', $days)->get();
