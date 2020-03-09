// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Ocr.Models
{
    public class RecognizeBusinessCardResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecognizeBusinessCardResponseData Data { get; set; }
        public class RecognizeBusinessCardResponseData : TeaModel {
            [NameInMap("Name")]
            [Validation(Required=true)]
            public string Name { get; set; }
            [NameInMap("Companies")]
            [Validation(Required=true)]
            public List<RecognizeBusinessCardResponseDataCompanies> Companies { get; set; }
            public class RecognizeBusinessCardResponseDataCompanies : TeaModel {
                    public string Company { get; set; }
            }
            [NameInMap("Departments")]
            [Validation(Required=true)]
            public List<RecognizeBusinessCardResponseDataDepartments> Departments { get; set; }
            public class RecognizeBusinessCardResponseDataDepartments : TeaModel {
                    public string Department { get; set; }
            }
            [NameInMap("Titles")]
            [Validation(Required=true)]
            public List<RecognizeBusinessCardResponseDataTitles> Titles { get; set; }
            public class RecognizeBusinessCardResponseDataTitles : TeaModel {
                    public string Title { get; set; }
            }
            [NameInMap("CellPhoneNumbers")]
            [Validation(Required=true)]
            public List<RecognizeBusinessCardResponseDataCellPhoneNumbers> CellPhoneNumbers { get; set; }
            public class RecognizeBusinessCardResponseDataCellPhoneNumbers : TeaModel {
                    public string CellPhoneNumber { get; set; }
            }
            [NameInMap("OfficePhoneNumbers")]
            [Validation(Required=true)]
            public List<RecognizeBusinessCardResponseDataOfficePhoneNumbers> OfficePhoneNumbers { get; set; }
            public class RecognizeBusinessCardResponseDataOfficePhoneNumbers : TeaModel {
                    public string OfficePhoneNumber { get; set; }
            }
            [NameInMap("Addresses")]
            [Validation(Required=true)]
            public List<RecognizeBusinessCardResponseDataAddresses> Addresses { get; set; }
            public class RecognizeBusinessCardResponseDataAddresses : TeaModel {
                    public string Address { get; set; }
            }
            [NameInMap("Emails")]
            [Validation(Required=true)]
            public List<RecognizeBusinessCardResponseDataEmails> Emails { get; set; }
            public class RecognizeBusinessCardResponseDataEmails : TeaModel {
                    public string Email { get; set; }
            }
        };

    }

}
