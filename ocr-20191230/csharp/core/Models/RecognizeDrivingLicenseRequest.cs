// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.OCR.Models
{
    public class RecognizeDrivingLicenseRequest : TeaModel {
        [NameInMap("ImageType")]
        [Validation(Required=false)]
        public int? ImageType { get; set; }

        [NameInMap("ImageURL")]
        [Validation(Required=true)]
        public string ImageURL { get; set; }

        [NameInMap("Side")]
        [Validation(Required=true)]
        public string Side { get; set; }

    }

}
