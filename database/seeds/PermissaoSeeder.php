<?php

use Illuminate\Database\Seeder;
use App\Permissao;

class PermissaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarios1 = Permissao::firstOrCreate([
            'nome' =>'usuario-view',
            'descricao' =>'Acesso a lista de Usuários'
        ]);
        $usuarios2 = Permissao::firstOrCreate([
            'nome' =>'usuario-create',
            'descricao' =>'Adicionar Usuários'
        ]);
        $usuarios2 = Permissao::firstOrCreate([
            'nome' =>'usuario-edit',
            'descricao' =>'Editar Usuários'
        ]);
        $usuarios3 = Permissao::firstOrCreate([
            'nome' =>'usuario-delete',
            'descricao' =>'Deletar Usuários'
        ]);
  
        $papeis1 = Permissao::firstOrCreate([
            'nome' =>'papel-view',
            'descricao' =>'Listar Papéis'
        ]);
        $papeis2 = Permissao::firstOrCreate([
            'nome' =>'papel-create',
            'descricao' =>'Adicionar Papéis'
        ]);
        $papeis3 = Permissao::firstOrCreate([
            'nome' =>'papel-edit',
            'descricao' =>'Editar Papéis'
        ]);
  
        $papeis4 = Permissao::firstOrCreate([
            'nome' =>'papel-delete',
            'descricao' =>'Deletar Papéis'
        ]);
  
        $favoritos1 = Permissao::firstOrCreate([
            'nome' =>'favoritos-view',
            'descricao' =>'Acesso aos favoritos'
        ]);
  
        $perfil1 = Permissao::firstOrCreate([
            'nome' =>'perfil-view',
            'descricao' =>'Acesso ao perfil'
        ]);
  
        $chamados1 = Permissao::firstOrCreate([
            'nome' =>'chamados-view',
            'descricao' =>'Acesso aos chamados'
        ]);
  
        $chamados2 = Permissao::firstOrCreate([
            'nome' =>'chamados-create',
            'descricao' =>'Acesso aos chamados'
        ]);
        $chamados3 = Permissao::firstOrCreate([
            'nome' =>'chamados-edit',
            'descricao' =>'Acesso aos chamados'
        ]);
        $chamados4 = Permissao::firstOrCreate([
            'nome' =>'chamados-delete',
            'descricao' =>'Acesso aos chamados'
        ]);
  
        echo "Registros das Permissoes foram criados com sucesso no sistema";
    }
}
