package com.sfaci.resultados.resultados;

import org.springframework.data.repository.CrudRepository;

import java.util.List;

public interface ResultadoRepository extends CrudRepository<Resultado, Integer> {

    List<Resultado> findAll();
    List<Resultado> findByLocal(String local);
    List<Resultado> findByLocalAndVisitante(String local, String visitante);
}
