<?php


use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule as FacadesSchedule;

// Artisan::command('inspire', function () {
//     $this->comment(Inspiring::quote());
// })->purpose('Display an inspiring quote')->hourly();

//EJECUCION DIARIA
// FacadesSchedule::command('app:send-whatsapp-message')->daily();
// FacadesSchedule::command('app:send-book-return-reminders')->daily();

//EJECUCION DIARIA A LAS 8 AM
FacadesSchedule::command('app:send-whatsapp-message')->dailyAt('08:00');
FacadesSchedule::command('app:send-book-return-reminders')->dailyAt('08:00');
//CADA MINUTO [PARA PRUEBAS]
// FacadesSchedule::command('app:send-whatsapp-message')->everyMinute();
// FacadesSchedule::command('app:send-book-return-reminders')->everyMinute();



