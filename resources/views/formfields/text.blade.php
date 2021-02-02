{!! "<!-- Template: ". __FILE__."-->" !!}
<input @if($row->required == 1) required @endif type="text" class="form-control" name="{{ $row->field }}"
        placeholder="333333{{ old($row->field, $options->placeholder ?? $row->getTranslatedAttribute('display_name')) }}"
       {!! isBreadSlugAutoGenerator($options) !!}
       value="{{ old($row->field, $dataTypeContent->{$row->field} ?? $options->default ?? '') }}">
