<div class="card-body">
    <div class="row">
        <div class="col-md-3 mb-3">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Procurar" wire:model.debounce.300ms="search">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <select wire:model="orderAsc" class="form-control mb-2">
                <option value="1">Crescente</option>
                <option value="0">Decrescente</option>
            </select>
        </div>

        <div class="col-auto ml-auto mb-2">
            Mostrar
            <select wire:model.lazy="pagina" id="por_pagina" class="custom-select w-auto">
                @for($i = 5;$i <= 25; $i += 5)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
            por página
        </div>
    </div>

    <table class="table table-hover table-striped mb-3">
        <thead>
        <tr>
            <th>Nome</th>
            <th class="text-center">Icone</th>
            <th class="text-center">Link</th>
            <th class="text-center">Status</th>
            <th class="text-center w-25">Ação</th>
        </tr>
        </thead>
        <tbody>
        @forelse($socials as $social)
            <tr>
                <td>{{ $social->name }}</td>
                <td class="text-center">{!! $social->icon !!}</td>
                <td class="text-center"><a href="{{ $social->link }}" target="_blank"><span class='badge badge-primary'><i class='fas fa-external-link-alt'></i> Link</span></a></td>
                <td class="text-center">{!! $social->StatusView !!}</td>
                <td class="text-center">
                    <span data-toggle="popover" title="{{ $social->user->name }}" data-content="<i class='fas fa-calendar-alt'></i> Em: {{date('d/m/Y',strtotime($social->updated_at))}} às {{date('H:i',strtotime($social->updated_at))}}h" class="btn btn-dark btn-xs"><i class="fas fa-user"></i></span>
                    <a href="{{ route('social.edit',$social->id) }}" class="btn btn-info btn-xs"><i class="fas fa-edit"></i></a>
                    {!! Form::model($social, ['method' => 'delete', 'route' => ['social.destroy', $social->id], 'class' =>'form-delete', 'style' => 'display:inline']) !!}
                    <button type="submit" name="delete_modal" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i></button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center">Sem Resultados</td>
            </tr>
        @endforelse
        </tbody>
    </table>
    {{ $socials->links() }}
</div>

