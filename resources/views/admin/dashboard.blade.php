@extends('admin.layout.adminside')

@section('title', 'Dashboard')

@section('content')

   

        <div class=" grid grid-cols-3  gap-4">


            <!-- Première colonne (70% de largeur) -->
            <div class="flex-1 lg:col-span-2 col-span-3">
                <div class="grid grid-cols-3 gap-4 h-full">
                    <!-- Carte 1 -->
                    <div class="col-span-3 md:col-span-1 p-4 md:p-5 bg-black dark:bg-gray-800 rounded-xl h-full">
                        <!-- Contenu de la carte 1 -->
                        <div class="flex flex-col justify-between h-full">
                            <!-- En-tête de la carte 1 -->
                            <div class="flex gap-2 text-white mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                                </svg>
                                <h3 class="text-md text-white dark:text-white">Budget</h3>
                            </div>
                            <!-- Contenu principal de la carte 1 -->
                            <div>
                                <h3 class="mt-2 font-bold text-white dark:text-gray-400 text-2xl">200,000 CFA</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Carte 2 -->
                    <div class="col-span-3 md:col-span-1 p-4 md:p-5 bg-gray-100 dark:bg-gray-800 rounded-xl">
                        <!-- Contenu de la carte 2 -->
                        <div class="flex flex-col justify-between h-full">
                            <!-- En-tête de la carte 2 -->
                            <div class="flex gap-2 mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V6.75Zm-12 0h.008v.008H6V6.75Z" />
                                </svg>
                                <h3 class="text-md text-black-700 dark:text-white">Clients</h3>
                            </div>
                            <!-- Contenu principal de la carte 2 -->
                            <div>
                                <h3 class="mt-2 font-bold text-black-700 dark:text-gray-400 text-2xl">24,000</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Carte 3 -->
                    <div class="col-span-3 md:col-span-1 p-4 md:p-5 bg-gray-100 dark:bg-gray-800 rounded-xl">
                        <!-- Contenu de la carte 3 -->
                        <div class="flex flex-col justify-between h-full">
                            <!-- En-tête de la carte 3 -->
                            <div class="flex gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                                </svg>
                                <h3 class="text-md text-black-700 dark:text-white">Agents déployés</h3>
                            </div>
                            <!-- Contenu principal de la carte 3 -->
                            <div>
                                <h3 class="mt-2 font-bold text-black-700 dark:text-gray-400 text-2xl">24,000</h3>
                            </div>
                        </div>
                    </div>



                    

                </div>

            </div>

            <!-- Deuxième colonne (30% de largeur) -->
            <div class="flex-2 bg-gray-200" style="width: 350px; ">
                <!-- Contenu de la deuxième colonne -->
                Ligne 1
                Ligne 2
            </div>
        </div>
    



@endsection
