import { Component, OnInit } from '@angular/core';
import {FormBuilder, FormGroup} from "@angular/forms";
import {Router} from "@angular/router";
import {LegalCase} from "../model/case";

@Component({
  selector: 'app-case-form',
  templateUrl: './case-form.component.html',
  styleUrls: ['./case-form.component.css']
})
export class CaseFormComponent implements OnInit {

  legalCaseForm: FormGroup;

  constructor(private fb: FormBuilder, private router: Router) {
    this.createForm();
  }

  ngOnInit() {
  }

  createForm() {
    this.legalCaseForm = this.fb.group({
      income: '',
      dateOfEmployment: ''
    });
  }

  processCase() {
    console.log('Case processed');
    this.router.navigate(['/case-result', 1]);
  }
}
