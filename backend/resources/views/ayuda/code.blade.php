<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Centro de Ayuda - Geseven</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <style> body { font-family: 'Poppins', sans-serif; } </style>
</head>
<body class="bg-[#F7F2E7] text-[#1f2937]">
  <header class="bg-white/80 backdrop-blur shadow-sm sticky top-0 z-40">
    <nav class="container mx-auto px-6 py-4 flex items-center justify-between">
      <a class="text-2xl font-bold text-[#D4AF37]" href="../untitled_screen/code.html">Geseven</a>
      <div class="hidden md:flex items-center space-x-6">
        <a class="hover:text-[#D4AF37]" href="../untitled_screen/code.html">Inicio</a>
        <a class="hover:text-[#D4AF37]" href="../publicar_un_lugar/code.html">Publicar lugar</a>
        <a class="hover:text-[#D4AF37]" href="../ayuda/code.html">Ayuda</a>
      </div>
      <a class="inline-flex items-center gap-2 rounded-md bg-[#D4AF37] px-4 py-2 text-sm font-semibold text-white hover:bg-[#b9952a] transition-colors" href="../login/register/code.html">Acceder</a>
    </nav>
  </header>
  <main class="container mx-auto px-6 py-16 space-y-10">
    <section class="text-center space-y-4">
      <h1 class="text-4xl font-bold text-[#003366]">¿En que podemos ayudarte?</h1>
      <p class="text-gray-600">Busca entre preguntas frecuentes o escribinos directamente.</p>
      <div class="mx-auto max-w-2xl flex items-center gap-3 bg-white rounded-full shadow-lg px-6 py-3">
        <span class="material-icons text-gray-400">search</span>
        <input id="help-search" type="text" placeholder="Buscar: pagos, reservas, publicaciones..." class="flex-1 bg-transparent focus:outline-none" />
        <button id="help-clear" type="button" class="text-sm text-[#003366] hover:text-[#D4AF37]">Limpiar</button>
      </div>
    </section>
    <section class="grid gap-8 lg:grid-cols-[1fr_0.6fr] items-start">
      <div class="space-y-4" id="help-results">
        <article class="bg-white rounded-3xl shadow-md p-6 help-card" data-tags="reserva pago cancelacion">
          <header class="flex items-center justify-between cursor-pointer" data-toggle>
            <h2 class="text-xl font-semibold text-[#003366]">Como gestiono pagos y devoluciones?</h2>
            <span class="text-[#D4AF37] transition-transform">▼</span>
          </header>
          <div class="mt-4 text-gray-600 hidden" data-content>
            <p>Podes monitorear todos los cobros desde Mis Reservas. Las devoluciones parciales se solicitan desde la misma pantalla seleccionando la reserva y el motivo.</p>
          </div>
        </article>
        <article class="bg-white rounded-3xl shadow-md p-6 help-card" data-tags="publicar fotos requisitos">
          <header class="flex items-center justify-between cursor-pointer" data-toggle>
            <h2 class="text-xl font-semibold text-[#003366]">Requisitos para publicar un espacio</h2>
            <span class="text-[#D4AF37] transition-transform">▼</span>
          </header>
          <div class="mt-4 text-gray-600 hidden" data-content>
            <ul class="list-disc pl-5 space-y-2">
              <li>Al menos 5 fotos en alta resolucion.</li>
              <li>Documentacion basica: CUIT, comprobante de domicilio y seguro.</li>
              <li>Politica de uso clara (horarios, ruidos, proveedores permitidos).</li>
            </ul>
          </div>
        </article>
        <article class="bg-white rounded-3xl shadow-md p-6 help-card" data-tags="perfil notificaciones seguridad">
          <header class="flex items-center justify-between cursor-pointer" data-toggle>
            <h2 class="text-xl font-semibold text-[#003366]">Seguridad de la cuenta</h2>
            <span class="text-[#D4AF37] transition-transform">▼</span>
          </header>
          <div class="mt-4 text-gray-600 hidden" data-content>
            <p>Activá la verificacion en dos pasos desde Configuracion > Seguridad. Recomendamos actualizar contraseña cada 6 meses.</p>
          </div>
        </article>
        <article class="bg-white rounded-3xl shadow-md p-6 help-card" data-tags="reportes soporte reclamos">
          <header class="flex items-center justify-between cursor-pointer" data-toggle>
            <h2 class="text-xl font-semibold text-[#003366]">Reportar un inconveniente</h2>
            <span class="text-[#D4AF37] transition-transform">▼</span>
          </header>
          <div class="mt-4 text-gray-600 hidden" data-content>
            <p>Desde cada reserva podes generar un reporte. Nuestro equipo se comunica en menos de 4 horas habiles para acompañarte.</p>
          </div>
        </article>
      </div>
      <aside class="bg-white rounded-3xl shadow-md p-6 space-y-4">
        <h2 class="text-2xl font-semibold text-[#003366]">No encontraste la respuesta?</h2>
        <p class="text-gray-600">Escribinos y un especialista te guiara paso a paso.</p>
        <a class="inline-flex items-center gap-2 rounded-md bg-[#D4AF37] px-5 py-3 font-semibold text-white hover:bg-[#b9952a] transition-colors" href="../contacto/code.html">Contactar soporte</a>
        <div class="pt-4 border-t border-gray-200 text-sm text-gray-500">
          <p>Horario de chat en vivo: Lun a Vie 10-18 hs.</p>
        </div>
      </aside>
    </section>
  </main>
  <footer class="bg-[#003366] text-white mt-16">
    <div class="container mx-auto px-6 py-10 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
      <p class="text-white/70">© 2024 Geseven. Todos los derechos reservados.</p>
      <div class="flex items-center gap-4 text-white/70 text-sm">
        <a class="hover:text-[#D4AF37]" href="../terminos/code.html">Terminos</a>
        <a class="hover:text-[#D4AF37]" href="../privacidad/code.html">Privacidad</a>
        <a class="hover:text-[#D4AF37]" href="../contacto/code.html">Contacto</a>
      </div>
    </div>
  </footer>
  <script>
    const helpSearch = document.getElementById('help-search');
    const helpClear = document.getElementById('help-clear');
    const cards = Array.from(document.querySelectorAll('.help-card'));

    cards.forEach(card => {
      const header = card.querySelector('[data-toggle]');
      const content = card.querySelector('[data-content]');
      header?.addEventListener('click', () => {
        const icon = header.querySelector('span');
        content?.classList.toggle('hidden');
        icon?.classList.toggle('rotate-180');
      });
    });

    function filterCards() {
      const query = (helpSearch?.value || '').trim().toLowerCase();
      cards.forEach(card => {
        if (!query) {
          card.classList.remove('opacity-40');
          card.classList.remove('hidden');
          return;
        }
        const tags = card.dataset.tags || '';
        const title = card.querySelector('h2')?.textContent?.toLowerCase() || '';
        const match = tags.includes(query) || title.includes(query);
        card.classList.toggle('hidden', !match);
        card.classList.toggle('opacity-40', !match);
      });
    }

    helpSearch?.addEventListener('input', filterCards);
    helpClear?.addEventListener('click', () => {
      if (helpSearch) helpSearch.value = '';
      filterCards();
      helpSearch?.focus();
    });
  </script>
</body>
</html>
