// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Ocr.Models
{
    public class RecognizeVATInvoiceAdvanceRequest : TeaModel {
        [NameInMap("FileURLObject")]
        [Validation(Required=true)]
        public Stream FileURLObject { get; set; }

        [NameInMap("FileType")]
        [Validation(Required=true)]
        public string FileType { get; set; }

    }

}
