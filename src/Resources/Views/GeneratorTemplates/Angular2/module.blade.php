import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { {{ $gen->moduleClass('routing') }} } from './{{ str_replace('.ts', '', $gen->moduleFile('routing')) }}';
// shell
import { InspiniaShellModule as Shell } from './../../shells/inspinia/inspinia.module';
// {{ $gen->entityName() }} containers
import { {{ $gen->containerClass('create', false) }} } from './containers/{{ str_replace(['.ts'], [''], $gen->containerFile('create', false)) }}';
import { {{ $gen->containerClass('edit', false) }} } from './containers/{{ str_replace(['.ts'], [''], $gen->containerFile('edit', false)) }}';
import { {{ $gen->containerClass('list-and-search', true) }} } from './containers/{{ str_replace(['.ts'], [''], $gen->containerFile('list-and-search', true)) }}';
// {{ $gen->entityName() }} components
import { {{ $gen->componentClass('form', false) }} } from './components/{{ str_replace(['.ts'], [''], $gen->componentFile('form', false)) }}';
import { {{ $gen->componentClass('table', true) }} } from './components/{{ str_replace(['.ts'], [''], $gen->componentFile('table', true)) }}';

@NgModule({
  imports: [
    CommonModule,
    Shell,
    {{ $gen->moduleClass('routing') }},
  ],
  declarations: [
	  {{ $gen->containerClass('create', false) }},
	  {{ $gen->containerClass('edit', false) }},
	  {{ $gen->containerClass('list-and-search', true) }},
	  {{ $gen->componentClass('form', false) }},
	  {{ $gen->componentClass('table', true) }},
  ]
})
export class {{ $gen->moduleClass('module') }} { }