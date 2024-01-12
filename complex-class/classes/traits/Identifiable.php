<?php

  namespace traits;

  trait Identifiable {
    public function generateId() {
      return uniqid();
    }
  }
