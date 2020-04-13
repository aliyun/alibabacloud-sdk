// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Ocr20191230.Models
{
    public class TrimDocumentAdvanceRequest : TeaModel {
        [NameInMap("FileURLObject")]
        [Validation(Required=true)]
        public Stream FileURLObject { get; set; }

        [NameInMap("FileType")]
        [Validation(Required=true)]
        public string FileType { get; set; }

        [NameInMap("OutputType")]
        [Validation(Required=true)]
        public string OutputType { get; set; }

    }

}
