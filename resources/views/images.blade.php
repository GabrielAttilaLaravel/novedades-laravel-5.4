@component('layouts.app')

    @slot('title')
        Images
    @endslot

        <div class="container">
            <div class="row">
                @component('components.thumbnail')
                    @slot('title', 'GabrielAttila')

                    @slot('image', asset('image/gabriel.jpeg'))

                        Comunidad de desarrollo web...
                    www.gamitec.com.ve
                @endcomponent

                @component('components.thumbnail')
                @slot('title', 'Familia')

                @slot('image', asset('image/familia.jpg'))

                    @slot('description')
                       Comindad de desarrollo web...
                    @endslot
                @endcomponent
            </div>
        </div>
@endcomponent