<?php

namespace MadeiraMadeira\Marketplace\Dominio;

/**
 * Description of ListResponseMeta
 *
 * @author Gabriel Cury
 */
class Meta extends AbstractModel
{

    protected $count;

    public function getCount()
    {
        return $this->count;
    }

    public function setCount($count)
    {
        $this->count = $count;
    }

}
