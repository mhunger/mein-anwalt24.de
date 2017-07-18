import { LegalPage } from './app.po';

describe('legal App', () => {
  let page: LegalPage;

  beforeEach(() => {
    page = new LegalPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
