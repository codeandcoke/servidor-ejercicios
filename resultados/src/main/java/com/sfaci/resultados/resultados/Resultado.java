package com.sfaci.resultados.resultados;

import javax.persistence.*;
import java.util.Date;

@Entity
@Table(name = "resultados")
public class Resultado {

    @Id
    @GeneratedValue
    private int id;
    @Column
    private String local;
    @Column
    private String visitante;
    @Column(name = "goles_local")
    private int golesLocal;
    @Column(name = "goles_visitante")
    private int golesVisitante;
    @Column
    private Date fecha;

    public Resultado() {
    }

    public String getLocal() {
        return local;
    }

    public void setLocal(String local) {
        this.local = local;
    }

    public String getVisitante() {
        return visitante;
    }

    public void setVisitante(String visitante) {
        this.visitante = visitante;
    }

    public int getGolesLocal() {
        return golesLocal;
    }

    public void setGolesLocal(int golesLocal) {
        this.golesLocal = golesLocal;
    }

    public int getGolesVisitante() {
        return golesVisitante;
    }

    public void setGolesVisitante(int golesVisitante) {
        this.golesVisitante = golesVisitante;
    }

    public Date getFecha() {
        return fecha;
    }

    public void setFecha(Date fecha) {
        this.fecha = fecha;
    }
}
