<x-app-layout>
    <x-slot name="header"></x-slot>
    <aside class="sidebar shadow">
        <menu>
            <ul class="menu-content">
                <li><a class="font-semibold text-gray-800 transition-colors duration-150" href="/manage">
                        <i class="fa fa-home"></i>
                        Dashboard</a></li>
                <li><a class="font-semibold text-gray-800 transition-colors duration-150" href="/manage">
                    <i class="fa fa-user" aria-hidden="true"></i>
                        Data Paslon</a></li>
                <li><a class="font-semibold text-gray-800 transition-colors duration-150" href="/manage/datapemilih">
                        <i class="fa fa-folder-open"></i>
                        Data Pemilih</a></li>
                <li><a class="font-semibold text-gray-800 transition-colors duration-150" href="/manage/suaramasuk">
                        <i class="fa fa-bar-chart-o"></i>
                        Suara Masuk</a></li>
            </ul>
        </menu>
    </aside>
    
    @yield('conten')
    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- DataTables -->
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- App scripts -->
    @stack('scripts')
</x-app-layout>
