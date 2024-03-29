import { ComponentFixture, TestBed } from '@angular/core/testing';

import { Pending2Component } from './pending2.component';

describe('Pending2Component', () => {
  let component: Pending2Component;
  let fixture: ComponentFixture<Pending2Component>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [Pending2Component]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(Pending2Component);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
