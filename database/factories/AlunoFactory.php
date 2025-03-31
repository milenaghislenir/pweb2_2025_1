<?php

namespace Database\Factories;
use App\Models\Aluno;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aluno>
 */
class AlunoFactory extends Factory
{

    protected $model = Aluno::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome'=> $this->fake->name(),
            'cpf'=> $this->fake->randomnumber(14, false),
            'telefone'=> $this->fake->cellphone(),
        ];
    }
}
