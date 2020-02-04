// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Ocr.Models
{
    public class RecognizeTableAdvanceRequest : TeaModel {
        [NameInMap("ImageURLObject")]
        [Validation(Required=true)]
        public Stream ImageURLObject { get; set; }

        [NameInMap("ImageType")]
        [Validation(Required=false)]
        public int? ImageType { get; set; }

        [NameInMap("OutputFormat")]
        [Validation(Required=true)]
        public string OutputFormat { get; set; }

        [NameInMap("UseFinanceModel")]
        [Validation(Required=true)]
        public bool? UseFinanceModel { get; set; }

        [NameInMap("AssureDirection")]
        [Validation(Required=true)]
        public bool? AssureDirection { get; set; }

        [NameInMap("HasLine")]
        [Validation(Required=true)]
        public bool? HasLine { get; set; }

        [NameInMap("SkipDetection")]
        [Validation(Required=true)]
        public bool? SkipDetection { get; set; }

    }

}
