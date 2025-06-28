<div
    x-data="{
        model: @entangle($attributes->wire('model')),
    }"
    x-init="
            ClassicEditor
                .create($refs.input,{
                    balloonToolbar: ['bold', 'italic', '|', 'link', 'insertImage', '|', 'bulletedList', 'numberedList'],
                    fontFamily: {
                        supportAllValues: true
                    },
                    fontSize: {
                        options: [10, 12, 14, 'default', 18, 20, 22],
                        supportAllValues: true
                    },
                    ckfinder: {
                        uploadUrl:'/admin/file-manager/upload?type=Files&_token={{csrf_token()}}',
                        openerMethod: 'popup',
                        options: {
                            resourceType: 'Images',
                        }
                    },
                    link: {
                        addTargetToExternalLinks: true,
                        defaultProtocol: 'https://',
                        decorators: {
                            toggleDownloadable: {
                                mode: 'manual',
                                label: 'Downloadable',
                                attributes: {
                                    download: 'file'
                                }
                            }
                        }
                    },
                    placeholder: '{{ $attributes->get('placeholder') ??'Type or paste your content here!' }}',
                })
                .then( editor => {
                      editor.setData(model ??'');
                      editor.model.document.on('change:data', (evt, data) => {
                         model=editor.getData();
                      });
                      window.editor = editor;
                } )
                .catch( err => {
                    console.error( err.stack );
                } );

                @if($attributes->has('data-update'))
                  window.addEventListener('{{ $attributes->get('data-update') }}',({detail:{content}})=>{
                        window.editor.setData(content);
                  })
                @endif
    "
    wire:ignore
>
    <textarea x-ref="input" {{ $attributes->merge(['class' => 'form-control']) }}></textarea>
</div>
