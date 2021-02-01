{{--Шаблон вывода пунктов меню в конструкторе меню--}}
<ol class="dd-list">

@foreach ($items as $item)
<!--    --><?php //$item->title = ; ?>
    <?php //$item->title = '555'; ?>
    <li class="dd-item" data-id="{{ $item->id }}">
        <div class="pull-right item_actions">
            <div class="btn btn-sm btn-danger pull-right delete" data-id="{{ $item->id }}">
                <i class="voyager-trash"></i> {{ __('voyager::generic.delete') }}
            </div>
            <div class="btn btn-sm btn-primary pull-right edit"
                 data-id="{{ $item->id }}"
                 data-title="{{ $item->title }}"
                 data-url="{{ $item->url }}"
                 data-target="{{ $item->target }}"
                 data-icon_class="{{ $item->icon_class }}"
                 data-color="{{ $item->color }}"
                 data-route="{{ $item->route }}"
                 data-parameters="{{ json_encode($item->parameters) }}"

                 data-status="{{ $item->status }}"
                 data-page_id="{{ $item->page_id }}"
                 data-slug="{{ $item->slug }}"
            >
                <i class="voyager-edit"></i> {{ __('voyager::generic.edit') }}
            </div>
        </div>
        <div class="dd-handle" style="font-weight: normal;">
            {{ "(".$item->id.") - " }}
            @if($options->isModelTranslatable)
                @include('voyager::multilingual.input-hidden', [
                    'isModelTranslatable' => true,
                    '_field_name'         => 'title'.$item->id,
                    '_field_trans'        => json_encode($item->getTranslationsOf('title'))
                ])
            @endif
{{--            <span>{{ "(".$item->id.")-".$item->title }}</span> <small class="url">{{ $item->link() }}</small>--}}
            <span style="font-weight: bold;"><span style="font-weight: normal;">{{ "(".$item->id.")-"}}</span> {{ $item->title }}</span>
{{--            (URL: {{ $item->link() }})--}}
            ({{ $item->slug }})
        </div>
        @if(!$item->children->isEmpty())
            @include('voyager::menu.admin', ['items' => $item->children])
        @endif
    </li>

@endforeach

</ol>
