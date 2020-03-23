// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Ocr.Models
{
    public class TrimDocumentRequest : TeaModel {
        [NameInMap("FileURL")]
        [Validation(Required=true)]
        public string FileURL { get; set; }

        [NameInMap("FileType")]
        [Validation(Required=true)]
        public string FileType { get; set; }

        [NameInMap("OutputType")]
        [Validation(Required=true)]
        public string OutputType { get; set; }

    }

}
