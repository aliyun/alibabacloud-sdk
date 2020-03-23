// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.Facebody.Models
{
    public class HandPostureResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public HandPostureResponseData Data { get; set; }
        public class HandPostureResponseData : TeaModel {
            [NameInMap("Outputs")]
            [Validation(Required=true)]
            public List<HandPostureResponseDataOutputs> Outputs { get; set; }
            public class HandPostureResponseDataOutputs : TeaModel {
                    public int? HandCount { get; set; }
                    public List<HandPostureResponseDataOutputsResults> Results { get; set; }
                    public class HandPostureResponseDataOutputsResults : TeaModel {
                        [NameInMap("Confident")]
                        [Validation(Required=true)]
                        public float? Confident { get; set; }

                        [NameInMap("Positions")]
                        [Validation(Required=true)]
                        public List<HandPostureResponseDataOutputsResultsPositions> Positions { get; set; }
                        public class HandPostureResponseDataOutputsResultsPositions : TeaModel {
                            [NameInMap("Points")]
                            [Validation(Required=true)]
                            public List<float?> Points { get; set; }

                        }

                    }
            }
            [NameInMap("MetaObject")]
            [Validation(Required=true)]
            public HandPostureResponseDataMetaObject MetaObject { get; set; }
            public class HandPostureResponseDataMetaObject : TeaModel {
                [NameInMap("Height")]
                [Validation(Required=true)]
                public int? Height { get; set; }

                [NameInMap("Width")]
                [Validation(Required=true)]
                public int? Width { get; set; }

            }
        };

    }

}
