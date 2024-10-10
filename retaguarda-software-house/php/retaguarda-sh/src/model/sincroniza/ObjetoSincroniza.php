<?php

class ObjetoSincroniza implements \JsonSerializable
{
    public $tabela;
    public $registros;

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize(): array
    {
        return [
            'tabela' => $this->tabela,
            'registros' => $this->registros
        ];
    }
}
