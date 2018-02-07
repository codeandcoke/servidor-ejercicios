package com.sfaci.resultados.resultados;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import java.util.Arrays;
import java.util.List;


@RestController
public class ResultadoController {

    @Autowired
    private ResultadoRepository repositorio;

    @RequestMapping("/resultados")
    public List<Resultado> getResultados() {

        List<Resultado> resultados = repositorio.findAll();
        return resultados;
    }
}
