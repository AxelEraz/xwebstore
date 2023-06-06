<div>
    <div class="grid max-w-screen-xl px-4 py-5 mx-auto text-gray-900 dark:text-white sm:grid-cols-2 md:grid-cols-3 md:px-6">
            <ul aria-labelledby="mega-menu-full-dropdown-button">
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Tus publicaciones.</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">En esta seccion vas a ver todas tus publicaciones y sus estados.</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Crear publicaciones.</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Completa con los datos de tu producto y publicalo ahora!</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Ventas</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Consulta tus ultimas ventas y mantene al día tus pedidos.</span>
                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Landing page.</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Estadisticas relacionadas a el alcance de tu pagina.</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">X-CRM.</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Es un software que contiene toda la información de los potenciales clientes obtenidos.</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Gestiona tu Stock!</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Agrega, busca, modifica productos de tu stock.</span>
                    </a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Reservaciones</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Connect with third-party tools that you're already using.</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700">
                        <div class="font-semibold">Tu Cuenta</div>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Detalles de tu cuenta.</span>
                    </a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                            <a href="{{ route('logout') }}"  @click.prevent="$root.submit();" class="block p-3 rounded-lg hover:bg-gray-50 dark:hover:bg-gray-700 dark:bg-red -700">
                                <div class="font-semibold">Salir</div>
                                <span class="text-sm text-gray-500 dark:text-gray-400">Cerrar sesion.</span>

                            </a>
                    </form>
                </li>
            </ul>
        </div>
</div>