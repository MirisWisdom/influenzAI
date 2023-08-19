<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Document;
use App\Models\Keyword;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name'     => 'Sick and tired: Casting a long shadow',
                'path'     => 'https://parlinfo.aph.gov.au/parlInfo/download/committees/reportrep/RB000006/toc_pdf/SickandtiredCastingalongshadow.pdf',
                'file'     => 'SickandtiredCastingalongshadow.pdf',
                'keywords' => [
                    'Covid'                                      => 'Topic Keyword',
                    'Australian Institute of Health and Welfare' => 'Organisation Keyword',
                    'Federal'                                    => 'Location Keyword'
                ],
            ],
            [
                'name'     => 'Caring for patients with post–COVID-19 conditions',
                'path'     => 'https://drive.google.com/file/d/1ndcd_MaWDiBS4OvGtRHSMVuGAhk30xRc/view',
                'file'     => 'RACGP - Caring for patients with post–COVID-19 conditions.pdf',
                'keywords' => [
                    'Long Covid'                                 => 'Topic Keyword',
                    'Australian Institute of Health and Welfare' => 'Organisation Keyword',
                    'Federal'                                    => 'Location Keyword'
                ],
            ],
            [
                'name'     => 'Acute rheumatic conditions',
                'path'     => 'https://www.menzies.edu.au/icms_docs/253288_Acute_rheumatic_fever_and_rheumatic_heart_disease_clinical_audit_protocol.pdf',
                'keywords' => [
                    'Rheumatic' => 'Topic Keyword',
                    'fever'     => 'Topic Keyword',
                    'Menzies'   => 'Organisation Keyword',
                    'NT'        => 'Location Keyword'
                ],
            ],
            [
                'name'     => 'Communicable diseases intelligence',
                'path'     => 'https://www1.health.gov.au/internet/main/publishing.nsf/Content/458DD8840E8C9332CA25891F0015C89D/$File/a_comparison_of_post_covid_vaccine_myocarditis_classification_using_the_brighton_collaboration_criteria_versus_centre_for_disease_control_criteria.pdf',
                'keywords' => [
                    'Covid'                              => 'Topic Keyword',
                    'Department of Health and Aged Care' => 'Organisation Keyword',
                    'Federal'                            => 'Location Keyword'
                ],
            ],
            [
                'name'     => 'Clinical and translational Immunology',
                'path'     => 'https://onlinelibrary.wiley.com/doi/epdf/10.1002/cti2.1443',
                'keywords' => [
                    'Influenza'                            => 'Topic Keyword',
                    'Hudson Institute of Medical Research' => 'Organisation Keyword',
                    'VIC'                                  => 'Location Keyword'
                ],
            ],
            [
                'name'     => 'Covid 19: second report',
                'path'     => 'https://media.opengov.nsw.gov.au/pairtree_root/66/de/fa/7f/7b/04/44/4e/8a/4d/6a/fb/e4/75/d1/f7/obj/The_COVID_19_pandemic_second_report.pdf',
                'keywords' => [
                    'Covid'     => 'Topic Keyword',
                    'Ombudsman' => 'Organisation Keyword',
                    'NSW'       => 'Location Keyword'
                ],
            ],
            [
                'name'     => 'Influenza surveillance report 9',
                'path'     => 'https://www.health.gov.au/sites/default/files/2023-08/aisr-fortnightly-report-no-9---24-july-to-6-august-2023.pdf',
                'keywords' => [
                    'Influenza'                          => 'Topic Keyword',
                    'Department of Health and Aged Care' => 'Organisation Keyword',
                    'Federal'                            => 'Location Keyword'
                ],
            ],
            [
                'name'     => 'Influenza surveillance report 8',
                'path'     => 'https://www.health.gov.au/sites/default/files/2023-07/aisr-fortnightly-report-no-8-10-july-to-23-july-2023.pdf',
                'keywords' => [
                    'Influenza'                          => 'Topic Keyword',
                    'Department of Health and Aged Care' => 'Organisation Keyword',
                    'Federal'                            => 'Location Keyword'
                ],
            ],
            [
                'name'     => 'Influenza surveillance report 7',
                'path'     => 'https://www.health.gov.au/sites/default/files/2023-07/aisr-fortnightly-report-no-7-26-june-to-09-july-2023.pdf',
                'keywords' => [
                    'Influenza'                          => 'Topic Keyword',
                    'Department of Health and Aged Care' => 'Organisation Keyword',
                    'Federal'                            => 'Location Keyword'
                ],
            ],
            [
                'name'     => 'Influenza surveillance report 6',
                'path'     => 'https://www.health.gov.au/sites/default/files/2023-06/aisr-fortnightly-report-no-6-12-june-to-25-june-2023.pdf',
                'keywords' => [
                    'Influenza'                          => 'Topic Keyword',
                    'Department of Health and Aged Care' => 'Organisation Keyword',
                    'Federal'                            => 'Location Keyword'
                ],
            ],
            [
                'name'     => 'Influenza surveillance report 5',
                'path'     => 'https://www.health.gov.au/sites/default/files/2023-06/aisr-fortnightly-report-no-5-29-may-to-11-june-2023_0.pdf',
                'keywords' => [
                    'Influenza'                          => 'Topic Keyword',
                    'Department of Health and Aged Care' => 'Organisation Keyword',
                    'Federal'                            => 'Location Keyword'
                ],
            ],
            [
                'name'     => 'Influenza surveillance report 4',
                'path'     => 'https://www.health.gov.au/sites/default/files/2023-06/aisr-fortnightly-report-no-4-15-may-to-28-may-2023.pdf',
                'keywords' => [
                    'Influenza'                          => 'Topic Keyword',
                    'Department of Health and Aged Care' => 'Organisation Keyword',
                    'Federal'                            => 'Location Keyword'
                ],
            ],
            [
                'name'     => 'Influenza surveillance report 3',
                'path'     => 'https://www.health.gov.au/sites/default/files/2023-05/aisr-fortnightly-report-no-3-1-may-to-14-may-2023_0.pdf',
                'keywords' => [
                    'Influenza'                          => 'Topic Keyword',
                    'Department of Health and Aged Care' => 'Organisation Keyword',
                    'Federal'                            => 'Location Keyword'
                ],
            ],
            [
                'name'     => 'Influenza surveillance report 2',
                'path'     => 'https://www.health.gov.au/sites/default/files/2023-05/aisr-fortnightly-report-no-2-17-april-to-30-april-2023.pdf',
                'keywords' => [
                    'Influenza'                          => 'Topic Keyword',
                    'Department of Health and Aged Care' => 'Organisation Keyword',
                    'Federal'                            => 'Location Keyword'
                ],
            ],
            [
                'name'     => 'Influenza surveillance report 1',
                'path'     => 'https://www.health.gov.au/sites/default/files/2023-04/aisr-fortnightly-report-no-1-3-april-to-16-april-2023.pdf',
                'keywords' => [
                    'Influenza'                          => 'Topic Keyword',
                    'Department of Health and Aged Care' => 'Organisation Keyword',
                    'Federal'                            => 'Location Keyword'
                ],
            ],
            [
                'name'     => 'Pneumonia using Bayesian network',
                'path'     => 'https://researchmgt.monash.edu/ws/portalfiles/portal/486546607/457409883_oa.pdf',
                'keywords' => [
                    'Influenza'         => 'Topic Keyword',
                    'Covid'             => 'Topic Keyword',
                    'Pneumonia'         => 'Topic Keyword',
                    'Monash University' => 'Organisation Keyword',
                    'VIC'               => 'Location Keyword'
                ],
            ],
            [
                'name'     => 'Communicable diseases intelligence 2011-18',
                'path'     => 'https://www1.health.gov.au/internet/main/publishing.nsf/Content/2A15CD097063EF40CA2587CE008354F1/$File/report_of_the_national_influenza_surveillance_scheme_2011_to_2018.pdf',
                'keywords' => [
                    'Influenza'            => 'Topic Keyword',
                    'Department of Health' => 'Organisation Keyword',
                    'Federal'              => 'Location Keyword'
                ],
            ],
            [
                'name'     => 'Seasonal Influenza Infection',
                'path'     => 'https://www.health.gov.au/sites/default/files/documents/2022/06/influenza-infection-flu-cdna-national-guidelines-for-public-health-units.pdf',
                'keywords' => [
                    'Influenza'                               => 'Topic Keyword',
                    'Communicable Diseases Network Australia' => 'Category Keyword',
                    'Federal'                                 => 'Location Keyword'
                ],
            ],
            [
                'name'     => 'Respiratory Infection in Residential Care',
                'path'     => 'https://www.health.gov.au/sites/default/files/documents/2022/09/national-guidelines-for-the-prevention-control-and-public-health-management-of-outbreaks-of-acute-respiratory-infection-including-covid-19-and-influenza-in-residential-care-facilities.pdf',
                'keywords' => [
                    'Influenza'                          => 'Topic Keyword',
                    'Covid'                              => 'Topic Keyword',
                    'Department of Health and Aged Care' => 'Organisation Keyword',
                    'Federal'                            => 'Location Keyword'
                ],
            ],
            [
                'name'     => 'Covid 19 Vaccine Rates Aug',
                'path'     => 'https://www.health.gov.au/sites/default/files/2023-08/covid-19-vaccination-geographic-vaccination-rates-lga-11-august-2023.pdf',
                'keywords' => [
                    'Covid'                              => 'Topic Keyword',
                    'Vaccination'                        => 'Topic Keyword',
                    'Department of Health and Aged Care' => 'Organisation Keyword',
                    'Federal'                            => 'Location Keyword'
                ],
            ],
            [
                'name'     => 'Covid 19 Vaccine Rates Jul 2',
                'path'     => 'https://www.health.gov.au/sites/default/files/2023-07/covid-19-vaccination-geographic-vaccination-rates-lga-27-july-2023.pdf',
                'keywords' => [
                    'Covid'                              => 'Topic Keyword',
                    'Vaccination'                        => 'Topic Keyword',
                    'Department of Health and Aged Care' => 'Organisation Keyword',
                    'Federal'                            => 'Location Keyword'
                ],
            ],
            [
                'name'     => 'Covid 19 Vaccine Rates Jul 1',
                'path'     => 'https://www.health.gov.au/sites/default/files/2023-07/covid-19-vaccination-geographic-vaccination-rates-lga-13-july-2023.pdf',
                'keywords' => [
                    'Covid'                              => 'Topic Keyword',
                    'Vaccination'                        => 'Topic Keyword',
                    'Department of Health and Aged Care' => 'Organisation Keyword',
                    'Federal'                            => 'Location Keyword'
                ],
            ],
            [
                'name'     => 'Covid 19 Vaccine Rates Jun 2',
                'path'     => 'https://www.health.gov.au/sites/default/files/2023-06/covid-19-vaccination-geographic-vaccination-rates-lga-29-june-2023.pdf',
                'keywords' => [
                    'Covid'                              => 'Topic Keyword',
                    'Vaccination'                        => 'Topic Keyword',
                    'Department of Health and Aged Care' => 'Organisation Keyword',
                    'Federal'                            => 'Location Keyword'
                ],
            ],
            [
                'name'     => 'Covid 19 Vaccine Rates Jun 1',
                'path'     => 'https://www.health.gov.au/sites/default/files/2023-06/covid-19-vaccination-geographic-vaccination-rates-lga-15-june-2023.pdf',
                'keywords' => [
                    'Covid'                              => 'Topic Keyword',
                    'Vaccination'                        => 'Topic Keyword',
                    'Department of Health and Aged Care' => 'Organisation Keyword',
                    'Federal'                            => 'Location Keyword'
                ],
            ],
            [
                'name'     => 'Covid 19 Vaccine Rates May 2',
                'path'     => 'https://www.health.gov.au/sites/default/files/2023-05/covid-19-vaccination-geographic-vaccination-rates-lga-19-may-2023.pdf',
                'keywords' => [
                    'Covid'                              => 'Topic Keyword',
                    'Vaccination'                        => 'Topic Keyword',
                    'Department of Health and Aged Care' => 'Organisation Keyword',
                    'Federal'                            => 'Location Keyword'
                ],
            ],
            [
                'name'     => 'Covid 19 Vaccine Rates May 1',
                'path'     => 'https://www.health.gov.au/sites/default/files/2023-05/covid-19-vaccination-geographic-vaccination-rates-lga-5-may-2023.pdf',
                'keywords' => [
                    'Covid'                              => 'Topic Keyword',
                    'Vaccination'                        => 'Topic Keyword',
                    'Department of Health and Aged Care' => 'Organisation Keyword',
                    'Federal'                            => 'Location Keyword'
                ],
            ],
            [
                'name'     => 'Survey for influenza vaccination in young adults',
                'path'     => 'https://ro.ecu.edu.au/cgi/viewcontent.cgi?article=11825&context=ecuworkspost2013',
                'keywords' => [
                    'Influenza'              => 'Topic Keyword',
                    'Covid'                  => 'Topic Keyword',
                    'Vaccination'            => 'Topic Keyword',
                    'Edith Cowan University' => 'Organisation Keyword',
                    'WA'                     => 'Location Keyword'
                ],
            ],
            [
                'name'     => 'Australian Long COVID Literature Review',
                'path'     => 'https://www.aihw.gov.au/getmedia/9592f439-9b96-4589-a55d-6b04e262e5e1/aihw-phe-318.pdf.aspx?inline=true',
                'keywords' => [
                    'Covid'                                      => 'Topic Keyword',
                    'Long Covid'                                 => 'Topic Keyword',
                    'Australian Institute of Health and Welfare' => 'Organisation Keyword',
                    'Federal'                                    => 'Location Keyword'
                ],
            ],
            [
                'name'     => 'Covid 19 impacts 2020, 2021, and 2022',
                'path'     => 'https://www.aihw.gov.au/getmedia/c017fa79-be4b-4ad5-bbf3-2878ed0995e5/aihw-aus-240_Chapter_1.pdf.aspx',
                'keywords' => [
                    'Covid'                                      => 'Topic Keyword',
                    'Australian Institute of Health and Welfare' => 'Organisation Keyword',
                    'Federal'                                    => 'Location Keyword'
                ],
            ],
            [
                'name'     => 'Changes during COVID-19',
                'path'     => 'https://www.aihw.gov.au/getmedia/cb5f5bbb-df0b-4a1c-9796-25ea2e94e447/aihw-aus-240_Chapter_2.pdf.aspx',
                'keywords' => [
                    'Covid'                                      => 'Topic Keyword',
                    'Australian Institute of Health and Welfare' => 'Organisation Keyword',
                    'Federal'                                    => 'Location Keyword'
                ],
            ],
            [
                'name'     => 'Pandemic Health Service Trends: Indigenous Communities',
                'path'     => 'https://www.aihw.gov.au/getmedia/f451fcb7-be85-401c-8e3d-efd815be84e6/aihw-aus-240_Chapter_3.pdf.aspx',
                'keywords' => [
                    'Covid'                                      => 'Topic Keyword',
                    'Australian Institute of Health and Welfare' => 'Organisation Keyword',
                    'Federal'                                    => 'Location Keyword'
                ],
            ],
        ];

        foreach ($data as $datum) {
            $document = Document::query()->firstOrCreate(
                ['name' => $datum['name'], 'path' => $datum['path'], 'file' => $datum['file'] ?? null],
                ['name' => $datum['name'], 'path' => $datum['path'], 'file' => $datum['file'] ?? null],
            );

            foreach ($datum['keywords'] as $keyword => $category) {
                $keyword = Keyword::query()->firstOrCreate(
                    [
                        'name' => $keyword],
                    [
                        'name' => $keyword],
                );

                $category = Category::query()->firstOrCreate(
                    [
                        'name' => $category],
                    [
                        'name' => $category],
                );

                $keyword->categories()->sync([$category->id], false);
                $document->keywords()->sync([$keyword->id], false);
            }
        }
    }
}
