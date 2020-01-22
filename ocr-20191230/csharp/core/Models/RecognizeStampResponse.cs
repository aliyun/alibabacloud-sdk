// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.OCR.Models
{
    public class RecognizeStampResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public RecognizeStampResponseData Data { get; set; }
        public class RecognizeStampResponseData : TeaModel {
            [NameInMap("Results")]
            [Validation(Required=true)]
            public List<RecognizeStampResponseDataResults> Results { get; set; }
            public class RecognizeStampResponseDataResults : TeaModel {
                    public List<RecognizeStampResponseDataResultsGeneralText> GeneralText { get; set; }
                    public class RecognizeStampResponseDataResultsGeneralText : TeaModel {
                            public string Content { get; set; }
                            public float Confidence { get; set; }
                    }
                    public RecognizeStampResponseDataResultsRoi Roi { get; set; }
                    public class RecognizeStampResponseDataResultsRoi : TeaModel {
                        [NameInMap("Left")]
                        [Validation(Required=true)]
                        public int? Left { get; set; }

                        [NameInMap("Top")]
                        [Validation(Required=true)]
                        public int? Top { get; set; }

                        [NameInMap("Width")]
                        [Validation(Required=true)]
                        public int? Width { get; set; }

                        [NameInMap("Height")]
                        [Validation(Required=true)]
                        public int? Height { get; set; }

                    }
                    public RecognizeStampResponseDataResultsText Text { get; set; }
                    public class RecognizeStampResponseDataResultsText : TeaModel {
                        [NameInMap("Content")]
                        [Validation(Required=true)]
                        public string Content { get; set; }

                        [NameInMap("Confidence")]
                        [Validation(Required=true)]
                        public float Confidence { get; set; }

                    }
            }
        };

    }

}
