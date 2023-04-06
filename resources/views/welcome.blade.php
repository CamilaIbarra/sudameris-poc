@extends('layouts.layout',
[
"title" => "Descuento de Cheques"
]
)
@section('content')
<section class="bg-slate-100 min-h-screen flex items-center justify-center" id="cotizacion">
    <div class="bg-white flex rounded-xl shadow-lg max-w-3xl p-5">
        <div class="md:block hidden w-1/2 relative">
            <img class="rounded-xl" src="https://images.pexels.com/photos/4386417/pexels-photo-4386417.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
        </div>
        <div class="md:w-1/2 px-10">
            <h2 class="font-bold text-2xl text-zinc-700">Descuento de cheque</h2>
            <p class="text-sm mt-2 text-zinc-500">
                Por favor, ingrese los siguientes datos para iniciar la cotizacion.
            </p>
            <form action="" class="flex flex-col">
                <input type="email" class="p-2 mt-4 rounded-xl border outline-none placeholder:text-sm focus:border-zinc-500" name="email" id="email" placeholder="Email">
                <input type="text" class="p-2 mt-5 rounded-xl border outline-none placeholder:text-sm focus:border-zinc-500" name="phone" id="phone" placeholder="Telefono">
                <p class="pt-4 px-1 text-sm text-zinc-700">Datos del librador del cheque:</p>
                <input type="text" class="p-2 mt-4 rounded-xl border outline-none placeholder:text-sm focus:border-zinc-500" name="company_cuit" id="company_cuit" placeholder="CUIT/RUC">
                <input type="text" class="p-2 mt-4 rounded-xl border outline-none placeholder:text-sm focus:border-zinc-500" name="company_name" id="company_name" placeholder="Nombre de la empresa">
                <input type="text" class="p-2 mt-4 rounded-xl border outline-none placeholder:text-sm focus:border-zinc-500" name="amount" id="amount" placeholder="Valor del cheque">
                <p class="pt-4 px-1 text-sm text-zinc-700">Fecha de pago:</p>
                <input type="date" class="p-2 mt-4 rounded-xl border outline-none text-sm text-zinc-400 focus:border-zinc-500" name="check_expiration" id="check_expiration" placeholder="Vencimiento del cheque">
                <button class="bg-teal-600 rounded-xl text-slate-100 py-2 mt-4 font-medium hover:bg-zinc-600"><a href="#liquidacion">Cotizar</a></button>
            </form>
        </div>
    </div>
</section>
<section class="bg-slate-100 min-h-screen flex items-center justify-center" id="liquidacion">
    <div class="bg-white flex rounded-xl shadow-lg max-w-3xl p-5">
        <div class="md:block hidden w-1/2 relative">
            <img class="rounded-xl" src="https://images.pexels.com/photos/4386417/pexels-photo-4386417.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
        </div>
        <div class="md:w-1/2 px-10">
            <h2 class="font-bold text-2xl text-zinc-700">Liquidacion</h2>
            <p class="text-sm mt-2 text-zinc-500">
                A continuacion podra observar informacion estimada de la liquidacion.
            </p>
            <div class="flex flex-col">
                <table class="my-2 w-auto overflow-auto">
                    <tbody>
                        <tr class="border-b">
                            <th scope="col" class="text-sm py-2 text-left">Valor nominal del cheque</th>
                            <td class="text-sm font-light p-1 text-right">$1.000.000,00</td>
                        </tr>
                        <tr class="border-b">
                            <th scope="col" class="text-sm font-normal py-2 text-left">Intereses</th>
                            <td class="text-sm font-light p-1 text-right">$(75.106,43)</td>
                        </tr>
                        <tr class="border-b">
                            <th scope="col" class="text-sm font-normal py-2 text-left">Comision de intermediacion</th>
                            <td class="text-sm font-light p-1 text-right">$(3.458,85)</td>
                        </tr>
                        <tr class="border-b">
                            <th scope="col" class="text-sm font-normal py-2 text-left">Derechos de mercado (0,06% prorrata 90 dias)</th>
                            <td class="text-sm font-light p-1 text-right">$(240,47)</td>
                        </tr>
                        <tr class="border-b">
                            <th scope="col" class="text-sm font-normal py-2 text-left">Iva sobre aranceles (21%)**</th>
                            <td class="text-sm font-light p-1 text-right">$(776,86)</td>
                        </tr>
                        <tr class="border-b">
                            <th scope="col" class="text-sm font-normal py-2 text-left">Iva sobre intereses</th>
                            <td class="text-sm font-light p-1 text-right">$(0,00)</td>
                        </tr>
                        <tr class="border-b">
                            <th scope="col" class="text-sm py-2 text-left">Neto a cobrar</th>
                            <td class="text-sm font-light p-1 text-right">$920.417,40</td>
                        </tr>
                        <tr>
                            <th scope="col" class="text-sm py-2 text-left">Fecha estimada de liquidacion</th>
                            <td class="text-sm font-light p-1 text-right">10/4/2023</td>
                        </tr>
                    </tbody>
                </table>
                <div class="flex items-center justify-around">
                    <button class="border-2 border-teal-600 rounded-xl text-zinc-500 py-1.5 px-3.5 mt-4 font-medium hover:text-zinc-700 hover:font-semibold"><a href="#cotizacion">Rechazar</a></button>
                    <button class="bg-teal-600 rounded-xl text-slate-100 py-2 px-5 mt-4 font-medium hover:bg-zinc-600"><a href="#tyc">Aceptar</a></button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-slate-100 min-h-screen flex items-center justify-center" id="tyc">
    <div class="bg-white flex rounded-xl shadow-lg max-w-3xl p-5">
        <div class="md:block hidden w-1/2 relative">
            <img class="rounded-xl" src="https://images.pexels.com/photos/4386417/pexels-photo-4386417.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
        </div>
        <div class="md:w-1/2 px-10">
            <h2 class="font-bold text-2xl text-zinc-700">Terminos y condiciones</h2>
            <div class="flex flex-col gap-20">
                <div class="m-2 h-72 rounded-sm overflow-y-scroll-auto">
                    <small class="text-zinc-600">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga consequatur architecto perspiciatis inventore amet totam. Aspernatur, ullam tenetur ad cupiditate earum natus amet veniam, molestiae, rerum in dicta aliquam vitae.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit soluta earum reiciendis non eos exercitationem illum pariatur! Magnam nemo ducimus assumenda quia pariatur optio deserunt suscipit, nobis vitae obcaecati neque?
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore, repudiandae? Explicabo, ex odio. Iure corrupti placeat modi aliquam quas expedita, eius distinctio sit illo praesentium, nobis cupiditate vero numquam aperiam.
                    </small>
                </div>
                <form action="" class="flex items-center">
                    <input type="checkbox" name="tyc" id="tyc" class="ml-4 h-4 w-4">
                    <small class="ml-1">He leído y acepto los Términos y Condiciones</small>
                </form>
            </div>
            <div class="flex items-center justify-center gap-1 mt-4 py-2 bg-yellow-100">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                </svg>
                <p class="text-sm text-zinc-600 font-medium">Esta oferta expira en 24hrs</p>
            </div>
            <div class="flex flex-col">
                <div class="flex items-center justify-around">
                    <button class="border-2 border-teal-600 rounded-xl text-zinc-500 py-1.5 px-3.5 mt-4 font-medium hover:text-zinc-700 hover:font-semibold"><a href="#liquidacion">Volver</a></button>
                    <button class="bg-teal-600 rounded-xl text-slate-100 py-2 px-5 mt-4 font-medium hover:bg-zinc-600">Confirmar</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection